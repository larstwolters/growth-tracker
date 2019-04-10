<?php

    class QueryLibrary
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

    }

