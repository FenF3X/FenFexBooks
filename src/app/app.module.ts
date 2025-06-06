import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';
import { ReactiveFormsModule } from '@angular/forms';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { MenuPrincipalComponent } from './menuPrincipal/menuPrincipal.component';
import { UsuariosComponent } from './usuarios/usuarios.component';
import { InicioComponent } from './inicio/inicio.component';
import { ReportesComponent } from './reportes/reportes.component';
import { AjustesComponent } from './ajustes/ajustes.component';
import { LoginComponent } from './login/login.component';
import { CrearCuentaComponent } from './crear-cuenta/crear-cuenta.component';
import { RecuperarCuentaComponent } from './recuperar-cuenta/recuperar-cuenta.component';
import { FormsModule } from '@angular/forms'; 
import { HTTP_INTERCEPTORS } from '@angular/common/http';
import { AuthInterceptor } from './auth.interceptor';
import { NavSuperiorComponent } from './nav-superior/nav-superior.component'; // ajusta la ruta si hace falta

@NgModule({
  declarations: [
    AppComponent,
    MenuPrincipalComponent,
    UsuariosComponent,
    InicioComponent,
    ReportesComponent,
    AjustesComponent,
    LoginComponent,
    CrearCuentaComponent,
    RecuperarCuentaComponent,
    NavSuperiorComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule
  ],
  providers: [
    {
    provide: HTTP_INTERCEPTORS,
    useClass: AuthInterceptor,
    multi: true
  }
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
