<?php


class GolferRules extends Controller
{
    const MIN_VALUE_Handicap = 18.0;
    const MAX_VALUE_Handicap = 44.0;

    /**
     * Give errors of Name input field
     * @param string $data The Name of golfer
     * @return array errors text of Name
     */
    public function nameValidate($data): array
    {

        $errors = [];

        // Name validation & make error
        empty($data['name']) ? array_push($errors['name'], 'Name can not be Empty!!') : null;
        !is_string($data['name']) ? array_push($errors['name'], 'Name is not a validate name') : null;
        strlen($data['name']) < 2 ? array_push($errors['name'], 'Name can not be less 2 characters ') : null;
        strlen($data['name']) > 50 ? array_push($errors['name'], 'Name can not be more then 50 characters ') : null;


        return $errors;
    }

    /**
     * Give errors of Handicap input field
     * @param string $data The Handicap of golfer
     * @return array errors text of Handicap
     */
    public function handicapValidate(array $data)
    {
        $errors = [];

        // Handicap validation & make error
        empty($data['handicap']) ? array_push($errors['handicap'], 'Handicap can not be Empty!!') : null;
        !is_double($data['handicap']) ? array_push($errors['handicap'], 'Handicap is not a validate number') : null;
        ($data['handicap'] < Self::MIN_VALUE_Handicap) && ($data['handicap'] > Self::MAX_VALUE_Handicap) ? array_push($errors['handicap'], 'Handicap is not in the right range') : null;


        return $errors;
    }

    /**
     * Give errors of Gender input field
     * @param string $data The Gender of golfer
     * @return array errors text of Gender
     */
    public function genderValidate(array $data)
    {
        $errors = [];

        // Gender validation & make error
        empty($data['gender']) ? array_push($errors['gender'], 'Gender can not be Empty!!') : null;
        !is_string($data['gender']) && ($data['gender'] != 'male' || $data['gender'] != 'female') ? array_push($errors['gender'], 'gender is not validate gender') : null;

        return $errors;
    }


}