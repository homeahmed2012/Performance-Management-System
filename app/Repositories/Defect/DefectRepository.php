<?php

namespace App\Repositories\Defect;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;


/**
 * BonusRepository is a class that contains common queries for bonuses
 */
class DefectRepository extends BaseRepository implements DefectInterface
{
    /**
    * UserRepository constructor.
    * Inject whatever passed model
    * @param Model $model
    */
    public function __construct(Model $model)
    {
        $this->setModel($model);
        $this->originalModel = $this->getModel();
    }

    
   
   
    


   


    



}