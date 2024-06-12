<?php

namespace App\Controllers\Actions;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;
use App\Models\LearningPathModel;
use App\Models\UserLearningPathModel;
use App\Models\UserSubCourseModel;
use App\Models\UserAnswerModel;
use App\Models\RequestLearningPathModel;

class User extends BaseController
{
    //leraning path

    public function startCoures($slug, $id) // start learning path by slug
    {
        
    }

    // sub courses

    public function statusSubCourse($id) // start sub course by slug
    {
        $rules = [
            'status' => 'required',
            'slug' => 'required'
        ];

        if ($this->validate($rules)) {
            $subcourse_model = new UserSubCourseModel();

            $data = [
                'user_id' => session('id'),
                'subcourse_id' => $id,
                'status' => $this->request->getVar('status')
            ];

            $subcourse_model->save($data);
        } else {
            $data['validation'] = $this->validator;
            $slug = $this->request->getVar('slug');
            return view(`course/$slug`, $data);
        }
    }

    public function saveTestAnswer($id) // save answer for sub course
    {
        /** @var string|null $jsonData */
        $jsonData = $this->request->getPost('userAnswers');
        $contentArray = json_decode($jsonData, true);
        $validationData = ['contentArray' => $contentArray];
        $rules = [
            'contentArray.*.test_material_id' => 'required|numeric',
            'contentArray.*.option_test_id' => 'required|numeric',
        ];
        if ($this->validateData($validationData, $rules)) {
            $model = new UserAnswerModel();
            foreach ($contentArray as $testAnswer) {
                $data = [
                    'user_id' => session('id'),
                    'test_material_id' => $testAnswer['test_material_id'],
                    'option_test_id' => $testAnswer['option_test_id'],
                ];
                $model->save($data);
            }
        } else {
            $data['validation'] = $this->validator;
            return view(`course/$id`, $data);
        }
    }

    // request learning path
    public function requestLearningPath($slug)
    {
        $model = new RequestLearningPathModel();
        $rules = [
            'user_id' => 'required',
            'learning_path_id' => 'required',
            'message' => 'required',
        ];

        if ($this->validate($rules)) {
            
            $data = [
                'user_id' => session('id'),
                'learning_path_id' => $this->request->getVar('learning_path_id'),
                'status' => 'pending',
                'message' => $this->request->getVar('message'),
            ];

            $model->save($data);
        } else {
            $data['validation'] = $this->validator;
            return view(`course/$slug`, $data);
        }
    }
}
