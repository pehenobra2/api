import { HttpClient } from '@angular/common/http';
import { Component } from '@angular/core';
import { Curso } from './curso';
import { CursoService } from './curso.service';


@Component({
  selector: 'app-curso',
  templateUrl: './curso.component.html',
  styleUrls: ['./curso.component.css']
})
export class CursoComponent {

  vetor: Curso[] = [];

  //objeto da classe curso
  curso = new Curso();

  constructor(private cursoService: CursoService){}

  ngOnInit(){
    //Ao iniciar o sistema, deverá listar os cursos
    this.selecao();
  }

  cadastro(): void {
    alert("Cadastrado");
  }

  selecao():void{
    this.cursoService.obterCursos().subscribe((res: Curso[]) => {
      this.vetor = res;
    });
  }

  alterar():void{
    alert("Alterado");
  }

  remover():void{
    alert("Remover");
  }

}
