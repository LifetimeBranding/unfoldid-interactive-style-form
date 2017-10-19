import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

// Components
import { AppComponent } from './app.component';
import { WelcomeComponent } from './welcome/welcome.component';
import { FormContainerComponent } from './form-container/form-container.component';

// Services
import { DataService } from './data.service';

// Routes
const routes: Routes = [
    { path: '', component: WelcomeComponent },
    { path: 'him', component: FormContainerComponent },
    { path: 'her', component: FormContainerComponent }
];

@NgModule({
  declarations: [
    AppComponent,
    WelcomeComponent,
    FormContainerComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(routes)
  ],
  providers: [ DataService ],
  bootstrap: [AppComponent]
})
export class AppModule { }
