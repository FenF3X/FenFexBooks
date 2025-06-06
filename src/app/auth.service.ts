import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Router } from '@angular/router';

@Injectable({ providedIn: 'root' })
export class AuthService {
  private apiUrl = 'http://localhost/backend/login.php';

  constructor(private http: HttpClient, private router:Router) {}

  login(usuario: string, contrasena: string) {
    return this.http.post<any>(this.apiUrl, { usuario, contrasena });
  }

  guardarToken(token: string) {
    localStorage.setItem('token', token);
  }

  obtenerToken(): string | null {
    return localStorage.getItem('token');
  }

  logout() {
  localStorage.removeItem('token');
  this.router.navigate(['/login']);
}
}
