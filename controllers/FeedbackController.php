<?php

namespace app\controllers;

use app\engine\App;

class FeedbackController extends Controller
{
    public function getDefaultAction() {
        return 'feedback';
    }

    public function actionFeedback()
    {
        $feedbacks = App::call()->feedbackRepository->getAll();

        echo $this->render('feedback', [
            'feedbacks' => $feedbacks
        ]);
    }
}