<?php

namespace Github\Validator;

class WorkflowRunValidator implements \Github\Validator\ValidatorInterface
{
    public function validate($data) : void
    {
        $constraints = array(new \Symfony\Component\Validator\Constraints\Count(array('min' => 0, 'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')), new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('id' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'node_id' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'head_branch' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'head_sha' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'run_number' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'event' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'status' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'conclusion' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'workflow_id' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'url' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'html_url' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'pull_requests' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Count(array('min' => 0, 'minMessage' => 'This array has not enough values. It should have {{ limit }} values or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'array')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'created_at' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'updated_at' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'jobs_url' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'logs_url' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'check_suite_url' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'artifacts_url' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'cancel_url' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'rerun_url' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'workflow_url' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'head_commit' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Count(array('min' => 0, 'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'repository' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Count(array('min' => 0, 'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'head_repository' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Count(array('min' => 0, 'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'head_repository_id' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.'))))), 'allowExtraFields' => false)));
        $validator = \Symfony\Component\Validator\Validation::createValidator();
        $violations = $validator->validate($data, $constraints);
        if ($violations->count() > 0) {
            throw new \Github\Validator\ValidationException($violations);
        }
    }
}