"use strict";
var FormValidator = /** @class */ (function () {
    function FormValidator() {
        this.intialized = true;
        console.log('Form Validator Initialized');
    }
    FormValidator.prototype.sectionValidated = function (section) {
        // About you section is the only one with required fields... for now
        if (section != 'about-you')
            return true;
        var failedToAnswerAllQuestions = false;
        var requiredQuestions = this.getRequiredQuestionsForSection(section);
        for (var question in requiredQuestions) {
            var field = document.forms['mens'][requiredQuestions[question]];
            var answer = field.value;
            if (!answer)
                failedToAnswerAllQuestions = true;
        }
        if (failedToAnswerAllQuestions)
            return false;
        return true;
    };
    FormValidator.prototype.getRequiredQuestionsForSection = function (section) {
        // only two quesitons for now
        // add switch statement later
        return ['first-name', 'last-name'];
    };
    return FormValidator;
}());
