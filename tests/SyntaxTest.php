<?php


namespace yii\tests\framework\validators;


use PHPUnit\Framework\TestCase;
use yii\validators\Boolean;
use yii\validators\Length;
use yii\validators\String;
use yii\validators\Validator;

class SyntaxTest extends TestCase
{
    public function testSyntax()
    {
        $validator = new Validator();
        $result = $validator->validateValue('1', [
            (new Boolean())->falseValue('0')->trueValue('1')
        ]);

        if (!$result->isValid())
        {
            foreach ($result->getErrors() as $error) {

            }
        }
    }
}