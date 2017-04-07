<?php

session_start();

class Login {

    public function select() {
        $data = (object) $_POST;

        if($data->login == "teste" && $data->pass == "123456"){
            $success = true;
            $_SESSION["login"] = true;
        }else{
            $success = false;
            $_SESSION["login"] = false;
        }

        echo json_encode(array(
          "success" => $success
        ));
    }
}

$acao = $_POST["action"];

$login = new Login();
$login->$acao();
?>
