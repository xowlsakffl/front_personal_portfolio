<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //데이터 필터링
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $data = [     
        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'description' => trim($_POST['description']),
        'errorKr' => '',
    ];

    if(empty($data['name'])){
        $data['errorKr'] = '이름을 입력해 주세요.';
        echo json_encode(['code'=>404, 'msg'=>$data['errorKr']]);
        exit();
    }

    if(empty($data['email'])){
        $data['errorKr'] = '이메일을 입력해주세요.';
        echo json_encode(['code'=>404, 'msg'=>$data['errorKr']]);
        exit();
    }else if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
        $data['errorKr'] = '올바른 형식의 이메일 주소를 입력해주세요.';
        echo json_encode(['code'=>404, 'msg'=>$data['errorKr']]);
        exit();
    }

    if(empty($data['description'])){
        $data['errorKr'] = '메세지를 입력해 주세요.';
        echo json_encode(['code'=>404, 'msg'=>$data['errorKr']]);
        exit();
    }

    if(empty($data['errorKr'])){

        require_once($_SERVER['DOCUMENT_ROOT']."/_lib/db_connect.php");
        $pdo = db_connect();

        try{
            $pdo->beginTransaction();
            $sql = "insert into inquiry(name, email, description, create_at)";
            $sql .= "values(?, ?, ?, now())";
            $stmh = $pdo->prepare($sql);
            $stmh->bindValue(1, $data['name'], PDO::PARAM_STR);
            $stmh->bindValue(2, $data['email'], PDO::PARAM_STR);
            $stmh->bindValue(3, $data['description'], PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
            echo json_encode(
                [
                    'code' => 200,
                ]
            );
        }catch(PDOException $Exceptiom){
            $pdo->rollBack();
            print "오류: ".$Exception->getMessage();
        }
    }
}
?>