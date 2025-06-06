import { Component } from '@angular/core';
import { AuthService } from '../../app/auth.service';
import { Router } from '@angular/router';
import { HttpClient } from '@angular/common/http';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-login',
  standalone: false,
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent {
  form: FormGroup;

  constructor(
    private auth: AuthService,
    private router: Router,
    private http: HttpClient,
    private fb: FormBuilder
  ) {
    this.form = this.fb.group({
      usuario: ['', Validators.required],
      contrasena: ['', Validators.required]
    });
  }

  iniciarSesion() {
    const datos = {
      usuario: this.form.value.usuario,
      contrasena: this.form.value.contrasena
    };

    this.http.post('http://localhost/AplicacionLibreria/backend/login.php', datos)
      .subscribe({
        next: (res: any) => {
          console.log('Login correcto', res);
          // Aquí puedes guardar el token o redirigir, por ejemplo:
           localStorage.setItem('token', res.token);
           this.router.navigate(['/inicio']);
        },
        error: (err) => {
          console.error('Error al iniciar sesión:', err.error);
        }
      });
  }
}
