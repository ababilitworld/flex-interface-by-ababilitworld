<?php
namespace Ababilitworld\FlexInterfaceByAbabilitworld\Interface\Crud;
interface Crud 
{
    public function create(array $data);
    public function save(array $data);
    public function getById(int $id);
    public function edit(int $id, array $data);
    public function update(int $id, array $data);
    public function delete(int $id);
}