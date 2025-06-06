import { Component } from '@angular/core';
import { AuthService } from '../auth.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-nav-superior',
  standalone: false,
  templateUrl: './nav-superior.component.html',
  styleUrl: './nav-superior.component.scss'
})
export class NavSuperiorComponent {

  constructor(private auth:AuthService, private router:Router){}

  logout() {
  localStorage.removeItem('token');
  this.router.navigate(['/login']);
}
}
