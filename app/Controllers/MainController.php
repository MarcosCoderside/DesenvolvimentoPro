<?php namespace App\Controllers;

use App\entities\users;
use App\entities\marketing;
use App\Models\UsersModel;
use App\Models\MarketingModel;

class MainController extends BaseController
{
    public function index()
    {
    $db = \Config\Database::connect();

    $sql = "SELECT * FROM users";

    $sqlFunction = "SELECT FUNCAO FROM users";

    $queryFunction = $db->query($sqlFunction);

    $resultsFunction = $queryFunction->getResultArray();

    $query = $db->query($sql);

    $results = $query->getResultArray();

    $title = "Titulo do card";

    $formTitle = "Form Adding Data";

    $data = [
    'name' => $formTitle,
    'title' => $title,
    'results' => $results,
    'option' => $resultsFunction
    ];
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

    public function Marketing()
    {
    $db = \Config\Database::connect();

    $sql = "SELECT * from marketing";

    $query = $db->query($sql);

    $results = $query->getResultArray();

    $title = "Marketing";

    $form = "Formulary Marketing";

    $data = [
    "form" => $form,
    "title" => $title,
    'results' => $results
    ];

    echo view('marketing', $data);
    }

    public function addMaketing()
    {
    $model = new MarketingModel();
    $data = $this->request->getPost();
    $user = new \App\Entities\marketing($data);
    $model->save($user);
    return redirect()->to('marketing');
    }

    public function sales()
    {

        $db = \Config\Database::connect();

        $sql = "SELECT * FROM state";

        $query = $db->query($sql);

        $results = $query->getResultArray();

        $data = ["results" => $results];

        return view('sales', $data);
    }

}