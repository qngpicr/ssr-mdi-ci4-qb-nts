<?php

namespace App\Controllers;

use App\Models\Mysql\CpuModelMysql;
use App\Models\Mysql\DeviceModelMysql;

class Home extends BaseController
{
    public function index()
    {
        // MySQL 버전 모델 사용
        $cpuModel    = new CpuModelMysql();
        $deviceModel = new DeviceModelMysql();

        // PostgreSQL 버전
        // $cpuModel    = new \App\Models\Psql\CpuModelPsql();
        // $deviceModel = new \App\Models\Psql\DeviceModelPsql();

        // Oracle 버전
        // $cpuModel    = new \App\Models\Oracle\CpuModelOracle();
        // $deviceModel = new \App\Models\Oracle\DeviceModelOracle();

        // -----------------------------------------------------------------------------------

        // 데이터 준비
//      $data['totalCpuCount']    = $cpuModel->countAll();
//      $data['totalDeviceCount'] = $deviceModel->countAll();
//      $data['hotCpus']          = $cpuModel->getHotItems();
//      $data['hotDevices']       = $deviceModel->getHotItems();

        $data['totalCpuCount']    = $cpuModel->countAll();
        $data['totalDeviceCount'] = $deviceModel->countAll();
        $data['hotCpus']          = $cpuModel->asObject()->getHotItems();
        $data['hotDevices']       = $deviceModel->asObject()->getHotItems();

        // 뷰 로드 (SSR index.php)
        return view('index', $data);
    }
}
