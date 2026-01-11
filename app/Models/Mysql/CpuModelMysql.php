<?php

namespace App\Models\Mysql;

use CodeIgniter\Model;

class CpuModelMysql extends Model
{
    protected $DBGroup    = 'mysql';
    protected $table      = 'cpu';
    protected $primaryKey = 'id';
    protected $returnType = 'object'; // 객체 반환

    /*
    public function countAll(): int
    {
        $query = $this->db->query("SELECT COUNT(*) AS cnt FROM {$this->table}");
        return (int) $query->getRow()->cnt;
    }

    public function getHotItems(): array
    {
        $query = $this->db->query("SELECT * FROM {$this->table} ORDER BY choice_cpu DESC LIMIT 5");
        return $query->getResult(); // 객체 반환
    }
    */

    // QB(Query Builder) 방식으로 변경된 메서드
    public function countAll(): int
    {
        return $this->builder()
                    ->countAllResults();
    }

    public function getHotItems(): array
    {
        return $this->builder()
                    ->orderBy('choice_cpu', 'DESC')
                    ->limit(5)
                    ->get()
                    ->getResult(); // 객체 반환
    }
}
