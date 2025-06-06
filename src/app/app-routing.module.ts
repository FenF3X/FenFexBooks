import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { UsuariosComponent } from './usuarios/usuarios.component';
import { InicioComponent } from './inicio/inicio.component';
import { AjustesComponent } from './ajustes/ajustes.component';
import { ReportesComponent } from './reportes/reportes.component';
import { LoginComponent } from './login/login.component';
import { RecuperarCuentaComponent } from './recuperar-cuenta/recuperar-cuenta.component';
import { CrearCuentaComponent } from './crear-cuenta/crear-cuenta.component';

const routes: Routes = [
  { path: '', redirectTo: 'login', pathMatch: 'full' },
  {path: 'login', component: LoginComponent},
  {path: 'inicio', component: InicioComponent},
  {path: 'usuarios', component: UsuariosComponent},
  {path: 'reportes', component: ReportesComponent},
  {path: 'ajustes', component: AjustesComponent},
  {path: 'recuperar', component: RecuperarCuentaComponent},
  {path: 'crearCuenta', component: CrearCuentaComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
