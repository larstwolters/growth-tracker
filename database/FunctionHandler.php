<?php

    function alertMessage($message) {
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    function redirectPage($address) {
        echo "<script>location.href = '$address'</script>";
    }

    class FunctionHandler
    {
        /**
         * @return string
         */
        function getAllData()
        {
            $query = "SELECT * FROM rubrics";
            return $query;
        }

        /**
         * @param $id
         * Dit is de ID die we willen opvragen
         * @return string
         */
        function getSkillById($id)
        {
            $query = $query = "SELECT * FROM rubrics WHERE ID = $id";
            return $query;
        }

        /**
         * @param $skill
         * De skill die je wilt updaten
         * @return string
         */
        function updateSkillLevel($skill) {
            $query = "UPDATE users SET $skill = :skillLevel WHERE user_name = :user_name";
            return $query;
        }

        function registerUser() {
            $query = "INSERT INTO users (user_email, user_password, user_name)
                      VALUES (:user_email,:user_password,:user_name);";
            return $query;
        }

        function checkEmail() {
            $query = "SELECT user_email FROM users WHERE user_email=:user_email";
            return $query;
        }

        function authenticateUser() {
            $query = "SELECT ID, user_email, user_password, user_name FROM users WHERE user_email=:user_email";
            return $query;
        }

    }

