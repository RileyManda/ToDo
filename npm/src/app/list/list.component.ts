import { Component,NgZone, ViewChild } from '@angular/core';
import { BreakpointObserver, Breakpoints, BreakpointState } from '@angular/cdk/layout';
import { Observable } from 'rxjs';
import { map,take} from 'rxjs/operators';


@Component({
  selector: 'list',
  styleUrls: ['list.component.css'],
  templateUrl: 'list.component.html',
})
export class ListComponent {

      tasks: string[] = ['Shower','Breakfast','Study','Work','Lunch','Reading'];

}
