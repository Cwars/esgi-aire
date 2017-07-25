<?php

class BackcommentController
{

    public function CommentMenuAction() {
        $v = new View("commentMenu");
        $comment = new Comment();

        $search = ["id","title","description","date","dateUpdated","author"];
        $res = $comment->getObj($search);

        $v->assign("search", $search);
        $v->assign("result", $res);
    }

    public function CommentAddAction() {
        $comment = new Comment();
        $v = new View('commentAdd');
        $v->assign("formComment", $comment->getFormComment());
    }

    public function CommentActionAddAction($params) {
        $v = new View("commentActionAdd");
        $username = $_SESSION['username'];

        $v->assign("username", $username);
    }

    public function CommentActionUpdateAction($params) {
        $v = new View("commentActionUpdate");
        $username = $_SESSION['username'];
        $comment=((new Comment())->populate(['id' => $params[0]]));

        $title = $comment->getTitle();
        $dateI = $comment->getDateInserted();

        $v->assign("username", $username);
        $v->assign("idUpdate",$params[0]);
        $v->assign("titleUpdate",$title);
        $v->assign("dateI",$dateI);
    }

    public function CommentUpdateAction($params) {
        $v = new View("commentUpdate");

        $comment=((new Comment())->populate(['id' => $params[0]]));
        $id = $params[0];

        $title = $comment->getTitle();
        $description = $comment->getDescription();
        $date = $comment->getDate();

        $v->assign("FormCommentUpdate", $comment->getFormCommentUpdate($id,$title,$description,$date));
    }

    public function CommentActionDeleteAction($params) {
        $v = new View("commentActionDelete");
        $v->assign("idDelete",$params);
    }

    public function CommentActionRestoreAction($params) {
        $v = new View("commentActionRestore");
        $v->assign("idRestore",$params);
    }


}