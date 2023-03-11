<?php

namespace App\Repositories;

use App\Models\Employee;

interface EmployeeRepositoryInterface
{
    public function all();
    public function findById($id);
    public function update($id);
}
