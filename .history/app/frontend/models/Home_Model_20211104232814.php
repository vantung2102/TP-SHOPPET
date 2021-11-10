<?php

    class Home_Model extends Base_Model
    {
        protected $table = 'sim_so';

        public function insert($data = [])
        {
            $query = "insert into {$this->table}(so, gia) values (:so, :gia)";
            $sth = $this->db->prepare($query);
            $sth->execute([
                ':so' => $data['so'],
                ':gia' => $data['gia'],
            ]);
            $data = $sth->fetch(PDO::FETCH_ASSOC);
            $sth->closeCursor();
        }

        public function loadData()
        {
            $query = "select * from {$this->table}";
            $sth = $this->db->prepare($query);
            $sth->execute();
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            return $data;
        }

        function delete($id)
        {
            $query = "delete from {$this->table} where id = :id";
            $sth = $this->db->prepare($query);
            $sth->execute([
                ':id'=>$id
            ]);
            
            $sth->closeCursor();
        }

        public function Update($data)
        {   
            $query = "update {$this->table} set avatar = :avatar, ten = :ten, tuoi = :tuoi, sdt = :sdt, fb = :fb, sodonhang = :sodonhang where id = :id";
            $sth = $this->db->prepare($query);
            $sth->execute([
                'avatar'=>$data['avatar'],
                'ten'=>$data['ten'],
                'tuoi'=>$data['tuoi'],
                'sdt'=>$data['sdt'],
                'fb'=>$data['fb'],
                'sodonhang'=>$data['sodonhang'],
                'id'=>$data['id']
            ]);

            //$data = $sth->fetchAll(PDO::FETCH_ASSOC);
            $sth->closeCursor();
            //return $data;
        }
    }