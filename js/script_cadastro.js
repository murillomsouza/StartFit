function alterarFormulario(){
    let tipo = document.getElementById("tipo_user").value
    let divAluno = document.getElementById("campos_aluno")
    let divProf = document.getElementById("campos_prof")
    let botao = document.getElementById("botao_cadastro")

    divAluno.style.display = "none"
    divProf.style.display = "none"
    botao.style.display = "none"

    if(tipo == "aluno"){
        divAluno.style.display = "block"
        botao.style.display = "block"
    } else if(tipo == "professor"){
        divProf.style.display = "block"
        botao.style.display = "block"
    }
}