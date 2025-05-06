<?php
require_once 'models/UserModel.php';

class UserController {
    public function list() {
        $model = new UserModel();
        $users = $model->getUsers();
        include 'views/user_list.php';
    }
}
