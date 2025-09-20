import { Routes } from '@angular/router';


export const routes: Routes = [
    {
      path: '',
      loadComponent: () => import('./modules/home/home.component').then(c => c.HomeComponent)
    },
    {
      path: 'auth',
      loadComponent: () => import('./modules/auth-profile/auth-profile.component').then(c => c.AuthProfileComponent),
      children: [
        {
          path: '', // <-- Esta es la ruta por defecto para /auth
          redirectTo: 'login',
          pathMatch: 'full' // Importante para que la redirección funcione correctamente
        },
        {
          path: 'login',
          loadComponent: () => import('./modules/auth-profile/login/login.component').then(c => c.LoginComponent)
        },
        {
          path: 'register',
          loadComponent: () => import('./modules/auth-profile/register/register.component').then(c => c.RegisterComponent)
        }
      ]
    },
    {
      path: '**',
      redirectTo: 'error/404',
    }
  ];
  