<?php namespace App\Controllers;

use App\entities\users;

use App\Models\UsersModel;


class MainController extends BaseController
{

    public function index()
    {
        $db = \Config\Database::connect();

        $sql = "SELECT * FROM users";

        $sql_function = "SELECT FUNCAO FROM users";

        $query_function = $db->query($sql_function);

        $results_function = $query_function->getResultArray();

        $query = $db->query($sql);

        $results = $query->getResultArray();

        $title = "Titulo do card";

        $formtitle = "Form Adding Data";

        $data = [
                'name' => $formtitle,
                'title' => $title,
                 'results' => $results,
                 'option' => $results_function];

        echo view('index',$data);
    }


    public function addData()
    {
        $userModel = new UsersModel();
        $data = $this->request->getPost();
        $user = new \App\Entities\users($data);
        $userModel->save($user);
        return redirect()->to('index');
    }

}