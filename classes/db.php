<?php
namespace techStore\classes;

abstract class Db
{
    public $conn;
    public $table;

    public function connect()
    {
        // this t3ood 3la class elDb w bktbha 3lshan hya property 
        $this->conn = mysqli_connect("localhost", "root", "", "techstore");
    }

    public function selectAll(string $field = "*"): array     // lw m7dedsh a3meda mo3yna w katb asma2ha 3lshan tezharlo yb2 default value b *
    {
        $sql = "select $field from $this->table";
        $res = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    public function selectId($id, string $field = "*"): array     // lw m7dedsh a3meda mo3yna w katb asma2ha 3lshan tezharlo yb2 default value b *
    {
        $sql = "select $field from $this->table where id = $id ";
        $res = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($res);
    }
    public function selectwhere(string $conds, string $field = "*"): array     // lw m7dedsh a3meda mo3yna w katb asma2ha 3lshan tezharlo yb2 default value b *
    {
        $sql = "select $field from $this->table where $conds";
        $res = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    public function getHas()
    {
        }
         public function get()
    {
       }
    public function getCount()
    {
        $sql = "select COUNT(*) AS cnt from $this->table"; //// 3mlt rename enha esmha cnt
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result)['cnt']; // hatli elvalue bta3t elkey elli esmha cnt 
    }
    public function insert(string $fields, string $value): bool
    {
        $sql = "insert into $this->table($fields) values ($value) ";
        return mysqli_query($this->conn, $sql);
    }
    public function update(string $set,  $id): bool
    {
        $sql = "update $this->table set $set where id = $id  ";
        return mysqli_query($this->conn, $sql);
    }
    public function delete($id): bool
    {
       
        $sql = " delete from $this->table where id = $id ";
        return mysqli_query($this->conn, $sql);
    }
}
