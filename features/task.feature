Feature: Post job
  In order to prove a new job has been created
  As a user
  I want to post a job

  Scenario: Post a job
    Given I am already logged in
    When I create a new job
    Then The output is "job created"
