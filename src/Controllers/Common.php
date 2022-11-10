<?php


namespace App\Controllers;

use App\Structure\Controller;
use App\Models\Room;
use App\Models\Student;
use App\Structure\Model;

class Common extends Controller
{


    public function students(){
        $model = new Student();
        $data = $model->get();
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/parts/header.php');
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/FormStudent.php');
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/Overview.php', ['data'=>$data, 'scope'=>'Student']);
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/upgradeStudentsCourse.php');
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/RemoveStudent.php');
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/parts/footer.php');
    }

    public function rooms(){
        $model = new Room();
        $data = $model->get();
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/parts/header.php');
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/FormRoom.php');
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/Overview.php', ['data'=>$data, 'scope'=>'Room']);
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/RemoveRoom.php');
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/updateResponsibleForm.php');
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/parts/footer.php');
    }

    public function newStudent($data){
        $model = new Student();
        $model->insert($data);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function newRoom($data){
        $model = new Room();
        $model->insert($data);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function editStudent($data){
        $model = new Student();
        $data = $model->find($data['id']);
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/parts/header.php');
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/FormStudent.php', $data);
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/parts/footer.php');
    }
    public function editRoom($data){
        $model = new Room();
        $data = $model->find($data['id']);
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/parts/header.php');
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/FormRoom.php', $data);
        $this->render($_SERVER['DOCUMENT_ROOT'] . '/src/Views/parts/footer.php');
    }

    public function updateStudent($data){
        $model = new Student();
        $id = $data['id'];
        unset($data['id']);
        $model->update($data, $id);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    public function updateRoom($data){
        $model = new Room();
        $id = $data['id'];
        unset($data['id']);
        $model->update($data, $id);
        header('Location: ' . '/index.php?controller=common&method=rooms');
    }

    public function removeStudent($data){
        $model = new Student();
        $model->remove($data['id']);
        header('Location: ' . '/index.php?controller=common&method=students');
    }

    public function removeStudentByYear($data){
        $model = new Student();
        $res = $model->get($data);
        if(!$res){
            die('Студенты с таким годом поступления не найдены.');
        }
        foreach($res as $student){
            $model->remove($student['id']);
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    public function removeRoomByNumber($data){
        $model = new Room();
        $res = $model->get($data);
        if(!$res){
            die('Кабинет с таким номером не найден.');
        }
        $model->remove($res[0]['id']);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function removeRoom($data){
        $model = new Room();
        $model->remove($data['id']);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function upgradeStudents(){
        $model = new Student();
        foreach($model->get() as $data){
            $model->update(['course'=>intval($data['course'])+1], $data['id']);
        };

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function updateResponsiblePerson($data){
        $model = new Room();
        $person = $model->get(['responsible_person'=>$data['responsible_person']]);
        if(sizeof($person) === 0) {
            die('Заведующий кабинетом не найден.');
        }
        $model->update(['responsible_person'=>$data['new_responsible_person']], $person[0]['id']);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}