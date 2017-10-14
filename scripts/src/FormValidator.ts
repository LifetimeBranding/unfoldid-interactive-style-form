 class FormValidator {

    public intialized: boolean

    constructor() {
      this.intialized = true
      console.log('Form Validator Initialized')
    }

    public sectionValidated(section: string) {

    // About you section is the only one with required fields... for now
    if (section != 'about-you') return true

    var failedToAnswerAllQuestions: boolean = false
    let requiredQuestions = this.getRequiredQuestionsForSection(section)

    for (let question in requiredQuestions) {
      let field = document.forms[0][requiredQuestions[question]]
      let answer = field.value

      if (!answer) failedToAnswerAllQuestions = true
     }
     
     if (failedToAnswerAllQuestions) 
      return false

    return true
   }

    private getRequiredQuestionsForSection(section: string) {
      // only four quesitons for now
      // add switch statement later
      return ['first-name','last-name','email-address','phone-number']
    }
}