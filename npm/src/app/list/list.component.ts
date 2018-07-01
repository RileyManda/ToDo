import { Component,NgZone,ViewChild } from '@angular/core';
import { BreakpointObserver, Breakpoints, BreakpointState } from '@angular/cdk/layout';
import { Observable } from 'rxjs';
import { map,take} from 'rxjs/operators';
import { FormsModule } from '@angular/forms';


@Component({
  selector: 'list',
  styleUrls: ['list.component.css'],
  templateUrl: 'list.component.html',
})
export class ListComponent {
  text = "";
      tasks = ['Shower','Meditate','Breakfast','Work','Dinner','Read','Sleep'];
      newTask ="";
      pushTask = function(){
      if(this.newTask != ""){
        this.tasks.push(this.newTask);
        this.newTask = "";
      }
      }

}
