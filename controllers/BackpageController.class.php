<?php

/**
 *
 */
class BackpageController
{

    public function PageMenuAction($params) {
        $datausers = new User();

        $type = "page";
        $search = ["id","username","firstname","lastname","email","status","dateInserted"];
        $res = $datausers->getObj($search,$params[0],NB_ITEM_BACK);

        if( !is_int($params[0]) || $params[0]>0 && $params[0]<=$res[1]){
            $v = new View("menu");
            $v->assign("search", $search);
            $v->assign("result", $res[0]);
            $v->assign("nbPage", $res[1]);
            $v->assign("type", $type);
        } else {
            $v = new View("page404");
        }
    }

    public function PageAddAction() {
        $page = new Page();
        $v = new View('pageAdd');
        $v->assign("formPage", $page->getFormPage());
    }

    public function PageActionAddAction($params) {
        $username = $_SESSION['username'];
        $v = new View("pageActionAdd");

        $v->assign("username",$username);
    }

//    public function PageActionUpdateAction($params) {
//        $v = new View("pageActionUpdate");
//        $page=((new Page())->populate(['id' => $params[0]]));
//
////        $username = $user->getUsername();
////        $v->assign("idUpdate",$params[0]);
////        $v->assign("usernameUpdate",$username);
//    }
//
//    public function PageActionUpdateAction($params) {
//        $v = new View("pageActionUpdate");
//        $username = $_SESSION['username'];
//        $page=((new Page())->populate(['id' => $params[0]]));
//
//        $title = $page->getTitle();
//        $v->assign("username",$username);
//        $v->assign("idUpdate",$params[0]);
//        $v->assign("titleUpdate",$title);
//    }

    public function PageActionDeleteAction($params) {
        $v = new View("pageActionDelete");
        $v->assign("idDelete",$params);
    }

    public function PageActionRestoreAction($params) {
        $v = new View("pageActionRestore");
        $v->assign("idRestore",$params);
    }


}