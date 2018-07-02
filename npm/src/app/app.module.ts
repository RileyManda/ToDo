import { BrowserModule } from '@angular/platform-browser';
import { NgModule,Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import {MatTooltipModule} from '@angular/material/tooltip';
import { AppComponent } from './app.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { NavComponent } from './nav/nav.component';
import {ListComponent } from './list/list.component';
import {MatCardModule} from '@angular/material/card';
import {MatButtonModule} from '@angular/material/button';
import { LayoutModule } from '@angular/cdk/layout';
import{HttpClientModule} from '@angular/common/http'
import { MatToolbarModule, MatSidenavModule,
MatIconModule, MatListModule, MatTableModule, MatPaginatorModule,
MatSortModule,MatBadgeModule,MatInputModule,MatSnackBarModule } from '@angular/material';
import { SnackBarComponent } from './snack-bar/snack-bar.component';


@NgModule({
  declarations: [
    AppComponent,
    NavComponent,
    ListComponent,
    SnackBarComponent,

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
    MatInputModule,
    MatCardModule,
    MatTooltipModule,
    FormsModule,
    MatSnackBarModule,
    HttpClientModule







  ],
  providers: [],
  bootstrap: [AppComponent]
})

export class AppModule {

    }
