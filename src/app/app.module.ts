import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { NavComponent } from './nav/nav.component';
import {ListComponent } from './list/list.component';
import { LayoutModule } from '@angular/cdk/layout';
import { MatToolbarModule, MatButtonModule, MatSidenavModule,
MatIconModule, MatListModule, MatTableModule, MatPaginatorModule,
MatSortModule,MatBadgeModule } from '@angular/material';


@NgModule({
  declarations: [
    AppComponent,
    NavComponent,
    ListComponent,



  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    LayoutModule,
    MatToolbarModule,
    MatButtonModule,
    MatSidenavModule,
    MatIconModule,
    MatListModule,
    MatTableModule,
    MatPaginatorModule,
    MatSortModule,
    MatBadgeModule,
  
  ],
  providers: [],
  bootstrap: [AppComponent]
})

export class AppModule { }
