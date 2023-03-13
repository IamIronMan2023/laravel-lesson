<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface EmployeeRepositoryInterface
{
    public function all();
    public function findById($id);
    public function update($id);
    public function store();
    public function destroy($id);
}
