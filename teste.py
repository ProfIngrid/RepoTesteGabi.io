print("Olá mundo")
print(20+14) #Isso é uma soma
print(23-12) #Isso é uma subtração
print(12*15) #Isso é uma multiplicação
print(35/10) #Isso é uma divisão
print(2**5) #Isso é uma potenciação
#Comentários
#Só pode comentar nessa linha
''' Isso é um comentario 
E eu posso ir para outra linha '''

print(2+10*10-5)
print( (2+10) * (10-5) )

#Variáveis - armazenam Valor / Dados
#É uma caixinha que guarda Dados
numero = 10 #declarando a variavel
print(numero)
print(numero+numero)
#nome da variavel não pode começar com numero
#Não pode ter espaços no nome 
nomePersonagem = "Kirana" #String = Texto
#Não pode usar simbolos: "" , <> /? .... 
#Não podem começar com letras maiusculas - sempre usar minusculas
print("Meu nome é "+nomePersonagem)
nivel = 1;
print("E meu nível é ",nivel," Eu ainda sou noob.")

#Faça um programa que recebe o valor do lado de um quadrado, e depois exiba na tela a área do quadrado.
#area do quadrado é lado*lado

lado = int( input("Digite o lado do quadrado:") )
areaDoQuadrado = lado*lado
print("A área do quadrado é ",areaDoQuadrado,"m²")

#área do triangulo
#Base * altura / 2
base = int( input("Digite a base do triangulo:") )
altura = int( input("Digite a altura do triangulo:"))
areaTriangulo = (base * altura) / 2
print("A área do triangulo é ",areaTriangulo,"m²")

