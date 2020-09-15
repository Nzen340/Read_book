<?php

    class DB{
        private $pdo;

        public function __construct()
        {
            try {
                $this->pdo = new PDO("mysql:dbname=school;host=localhost", 'root', 'root');
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                die($e->getMessage);
            }
        }

        public function index()
        {
            $statement = $this->pdo->query(
                "SELECT * FROM students"
            );
            if($statement){
                $student = $statement->fetchAll(PDO::FETCH_OBJ);
                return $student;
            }
        }

        public function show($id)
        {
            $statement = $this->pdo->prepare(
                "SELECT * FROM students WHERE id= :id"
            );
            $statement->bindParam(":id", $id);
            
            if($statement->execute()){
                $student = $statement->fetch(PDO::FETCH_OBJ);
                return $student;
            }
        }

        public function store($data)
        {
            $statement = $this->pdo->prepare("
                INSERT INTO `students`(`name`, `email`, `gender`, `dob`, `age`)
                VALUES (:name, :email, :gender, :dob, :age)
            ");

            $statement->bindParam(":name", $data['name']);
            $statement->bindParam(":email", $data['email']);
            $statement->bindParam(":gender", $data['gender']);
            $statement->bindParam(":dob", $data['dob']);
            $statement->bindParam(":age", $data['age']);

            if($statement->execute()){
                $student = $this->pdo->lastInsertId();
                header("location: edit.php?id={$student}");
            }
        }


        public function delete($id)
        {
            $statement = $this->pdo->prepare("
                DELETE FROM students WHERE id = :id
            ");

            $statement->bindParam(":id", $id);

            if($statement->execute()){
                header('location: index.php');
            }
        }

        public function update($id,$data)
        {
            $statement = $this->pdo->prepare("
                UPDATE students
                SET name = :name, email = :email, gender = :gender, dob = :dob, age = :age
                WHERE id = :id
            ");

            $statement->bindParam(":id", $id);
            $statement->bindParam(":name", $data['name']);
            $statement->bindParam(":email", $data['email']);
            $statement->bindParam(":gender", $data['gender']);
            $statement->bindParam(":dob", $data['dob']);
            $statement->bindParam(":age", $data['age']);

            if($statement->execute()){
                header("location: index.php");
            }
        }
    }
    