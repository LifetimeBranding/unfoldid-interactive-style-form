import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-welcome',
  templateUrl: './welcome.component.html',
  styleUrls: ['./welcome.component.css']
})


export class WelcomeComponent implements OnInit {
    
  labels = {
      header: 'Would you like the version that is for Him or for Her?',
      male: 'Him',
      female: 'Her',
      button: 'Begin'
  };

  constructor(private router: Router) { }

  ngOnInit() {
  }

  onBeginButtonClicked() {
     // this.router.navigateByUrl('/');
  }

}
