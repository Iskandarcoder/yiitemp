public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelInrelative = $model->inRelative;
        


        if ($model->load(Yii::$app->request->post())) {

            $oldIDs = ArrayHelper::map($modelInrelative, 'sert_id', 'p_id');
            $modelInrelative = Model::createMultiple(InRelative::classname(), $modelInrelative);
            Model::loadMultiple($modelInrelative, Yii::$app->request->post());
            $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelInrelative, 'sert_id', 'p_id')));

            $valid = $model->validate();
            $valid = Model::validateMultiple($modelInrelative) && $valid;

            $img = UploadedFile::getInstance($model,'p_photo');
            $imgData =file_get_contents($img->tempName);
            
            $model->p_photo = $imgData;

            if ($model->save()) {
                $valid = true;
                 foreach ($modelInrelative as $key => $modelI) {
                    $modelI->sert_id = $model->p_id;
                    //$valid = $valid && $modelI->validate();

                }

               

                if ($valid) {
                    $transaction = \Yii::$app->db->beginTransaction();
                    try {
                        $flag = false;

                        foreach ($modelInrelative as $modelI) {
                            if (!($flag = $modelI->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }

                        
            
                        if ($flag) {
                            $transaction->commit();
                            return $this->redirect(['print', 'id' => $model->p_id]);
                        }
                    } catch (Exception $e) {
                        $transaction->rollBack();
                    }
                }

            }

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();

                try {
                    if ($flag = $modelCustomer->save(false)) {
                        foreach ($modelInrelative as $modelin) {
                            $modelAddress->sert_id = $modelCustomer->p_id;
                            if (! ($flag = $modelin->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }

                        
                    }

                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $modelCustomer->p_id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }

            return $this->redirect(['view', 'id' => $model->p_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'modelInrelative' => $modelInrelative,

            ]);
        }
    }
    