Feature: Login
  In order to access secured content
  As a site user
  I can login to view secured content


  Scenario: User fill out the login form
    Given I am on "example/login"
    And I fill in "username" with "tester"
    And I fill in "password" with "mypassword"
    And I press "Submit"
    Then I should see "Welcome: tester"