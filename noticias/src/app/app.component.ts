import { Component, OnInit } from '@angular/core';

import { NoticiaService } from './noticia.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
	
  	title = 'Gerenciador de Notícias';

  	noticias = null;

  	noticia = {
  		id: null,
  		titulo: null,
  		corpo: null,
      	hora_da_notica: null
  	}

  	constructor(private noticiaService: NoticiaService) {}

  	ngOnInit() {
  		this.exibirNoticias();
  	}

  	exibirNoticias() {
  		this.noticiaService.exibirNoticias().subscribe(
  			result => this.noticias = result
  		);
  	}

  	inserirNoticia() {
  		this.noticiaService.inserirNoticia(this.noticia).subscribe(
  			dados => {
  				if(dados['resultado'] == 'OK') {
  					alert(dados['mensagem']);
					this.exibirNoticias();
  				}
  			}
  		);
  	}

  	excluirNoticia(id) {
  		this.noticiaService.excluirNoticia(id).subscribe(
  			dados => {
  				if(dados['resultado'] == 'OK') {
  					alert(dados['mensagem']);
  					this.exibirNoticias();
  				}
  			}
  		);
  	}

  	editarNoticia() {
  		this.noticiaService.editarNoticia(this.noticia).subscribe(
  			dados => {
  				if(dados['resultado'] == 'OK') {
  					alert(dados['mensagem']);
  					this.exibirNoticias();
  				}
  			}
  		);
  	}

  	selecionarNoticia(id) {
  		this.noticiaService.selecionarNoticia(id).subscribe(
  			result => this.noticia = result[0]
  		);
  	}
	
	resetForm(){
		this.noticia = {
			id: ' ',
			titulo:' ',
			corpo: ' ',
			hora_da_notica: ' '
		}
	
	}  

  	Registros() {
  		if(this.noticias == null) {
  			return false;
  		}else{
  			return true;
  		}
  	}

}
