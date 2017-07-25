<?php

class xmlController
{
    public function xmlAction()
    {
        header("Content-type: text/xml");

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<rss version="2.0">';
        $xml .= '<channel>';
        $xml .= ' <title>RSS Stream of ESGI Aire</title>';
        $xml .= ' <link>'.PATH_RELATIVE.'</link>';
        $xml .= ' <description>Here you can see the latest contents of our site</description>';
        $xml .= ' <language>fr</language>';
        $xml .= ' <copyright>esgi-aire.com</copyright>';

        $xml .= ' <category>Event</category>';

        $event = $event = (new Event())->getAll('event');
        foreach ($event as $ev)
        {
            $xml .= '<item>';
            $xml .= '<title>'.html_entity_decode($ev['title']).'</title>';
            $xml .= '<link>'.PATH_RELATIVE.'event/'.$ev['id'].'</link>';
            $xml .= '<guid isPermaLink="true">'.PATH_RELATIVE.'event/'.$ev['id'].'</guid>';
            $xml .= '<description>'.strip_tags(substr(html_entity_decode(html_entity_decode($ev['description'])), 0, 128)).'</description>';
            $xml .= '</item>';
        }

        $xml .= ' <category>News</category>';

        $news = (new News())->getAll('news');
        foreach ($news as $n)
        {
            $xml .= '<item>';
            $xml .= '<title>'.$n['title'].'</title>';
            $xml .= '<link>'.PATH_RELATIVE.'newsItem/'.$n['id'].'</link>';
            $xml .= '<guid isPermaLink="true">'.PATH_RELATIVE.'newsItem/'.$n['id'].'</guid>';
            $xml .= '<description>'.strip_tags(substr(html_entity_decode($n['content']), 0, 128)).'</description>';
            $xml .= '</item>';
        }

        $xml .= ' <category>Page</category>';

        $pages = (new Page())->getAll('page');
        foreach ($pages as $page)
        {
            $xml .= '<item>';
            $xml .= '<title>'.$page['title'].'</title>';
            $xml .= '<link>'.PATH_RELATIVE.$page['title'].'</link>';
            $xml .= '<guid isPermaLink="true">'.PATH_RELATIVE.$page['title'].'</guid>';
            $xml .= '<description>'.strip_tags(substr($page['content']), 0, 128).'</description>';
            $xml .= '</item>';
        }

        $xml .= '</channel>';
        $xml .= '</rss>';

        echo $xml;

    }
}