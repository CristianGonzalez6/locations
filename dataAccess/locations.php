<?php

class locations extends ConnectionToSql
{
    public function Read($id)
    {
        $statement = $this->GetConnection()->prepare("call SP_ReadLocationsById(:id)");
        $statement->execute(array(':id' => $id));

        return $statement->fetch();
    }
}