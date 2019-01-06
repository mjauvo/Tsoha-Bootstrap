<?php
    /**
     * DepartmentModel
     * --A model class representing a department where employees work.
     *
     * @author Markus J. Auvo 2018
     */
    class DepartmentModel extends BaseModel
    {
        // --------------------------------------------------
        //  A T T R I B U T E S
        // --------------------------------------------------

        public $id;
        public $name;

        // --------------------------------------------------
        //  C O N S T R U C T O R
        // --------------------------------------------------

        public function __construct($attributes = null) {
            parent::__construct($attributes);
        }

        // --------------------------------------------------
        //  S T A T I C   D A T A B A S E   M E T H O D S
        // --------------------------------------------------

        /**
         * [C] R U D
         * Stores a new department in database.
         *
         * @param $department
         */
        public static function create($department) {
            $sql = "INSERT INTO TABLE tblDepartment";
            $sql .= "VALUES (:id, :name);";

            $query = DB::connection()->prepare($sql);
            $query->execute(array(
                'id' => $this->id,
                'name' => $this->name
            ));
            $row = $query->fetch();
        }

        /**
         * C [R] U D
         * Fetches a department from database.
         *
         * @param $id
         * @return \DepartmentModel
         */
        public static function read($id) {
            $sql  = "SELECT * ";
            $sql .= "FROM tblDepartment ";
            $sql .= "WHERE ID = :id LIMIT 1;";

            $query = DB::connection()->prepare($sql);
            $query->execute(array('id' => $id));
            $row = $query->fetch();

            if($row) {
                $department = new DepartmentModel(array(
                    'id'    => $row['id'],
                    'name'  => $row['departmentname']
                ));
            }

            return $department;
        }

        /**
         * C [R] U D
         * Fetches all departments from database.
         * 
         * @return \DepartmentModel
         */
        public static function readAll() {
            $sql = "SELECT * ";
            $sql .= "FROM tblDepartment";

            $query = DB::connection()->prepare($sql);
            $query->execute();
            $rows = $query->fetchAll();

            foreach($rows as $row) {
                $departments[] = new DepartmentModel(array(
                    'id'    => $row['id'],
                    'name'  => $row['departmentname']
                ));
            }

            return $departments;
        }

		/**
		 * C R [U] D
		 * Updates a department in database.
		 * 
		 * @param type $id
		 */
        public static function update() {
            $sql  = "UPDATE tblDepartment ";
            $sql .= "SET name=:name ";
            $sql .= "WHERE id=:id RETURNING id;";

            $query = DB::connection()->prepare($sql);
            $query->execute(array(
                'name' => $this->name,
                'id' => $this->id
            ));
            $row = $query->fetch();
        }

        /**
         * C R U [D]
         * Deletes a department from database.
         * 
         * @param type $id
         */
        public static function delete($id) {
            $sql  = "DELETE FROM tblDepartment ";
            $sql .= "WHERE id= :id;";

            $query = DB::connection()->prepare($sql);
            $query->execute(array(
                'id' => $this->id
            ));
            $row = $query->fetch();
        }
    } // End of class
