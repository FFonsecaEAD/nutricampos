# Nutricampos




- [Sobre o NutriCampos](#sobre-o-nutricampos)
- [Identificação](#identificação)
- [Comunicação](#comunicação)
- [Instalação](#instalação)
- <!-- - [Como contribuir](#como-contribuir) -->
<!-- - [FAQ](#perguntas-frequentes-faq)
- [Pacotes (módulos)](#pacotes-módulos)
- [Upgrade](#upgrade) -->

## Sobre o NutriCampos
Sistema de Controle Alimentar Escolar - Este nome junta "Nutri" (de nutrição) com "Campus", evocando a importância da alimentação saudável no ambiente escolar e reforçando a ideia de um sistema focado em promover hábitos alimentares nutritivos entre os alunos.

## Identificação

Curso: Qualificação Profissional

Disciplina: Programador WEB

Período Ministrado/Semestre 1º
Semestre/2024Professor: Fernando José Corrêa da Fonseca

Tempo Previsto: 45(quarenta e cinco) dias

Desenvolvimento de Software para Controle de Cardápio Escolar

## Introdução

O software de controle de cardápio escolar é uma ferramenta essencial para escolas e
instituições educacionais gerenciarem eficientemente as refeições servidas aos
alunos. Este documento estabelece os requisitos e detalha o processo de
desenvolvimento do software, que será construído utilizando PHP como linguagem
de programação, o framework Laravel, e o framework Bootstrap para o frontend.

## Objetivo

O objetivo deste projeto é desenvolver um sistema de controle de cardápio escolar que
permita às escolas criar, gerenciar e comunicar os cardápios de refeições aos
alunos, funcionários e responsáveis, garantindo uma alimentação saudável e
balanceada.

## Especificação Técnica

### Tecnologias Utilizadas

- Linguagem de Programação: PHP
- Framework Web: Laravel
- Banco de Dados: MySQL ou MariaDB
- Frontend: HTML5, CSS3 (Bootstrap), JavaScript (opcional)

### Funcionalidades Principais

O software deve incluir as seguintes funcionalidades principais:

 #### Cadastro de Cardápios:

  - Permitir que os usuários cadastrem cardápios para café da manhã, almoço e jantar.
  - Associar cada cardápio a uma data específica.
  - Incluir informações detalhadas sobre cada item do cardápio, como nome, descrição, ingredientes,informações nutricionais e restrições alimentares.

 #### Gerenciamento de Cardápios:

  - Permitir que os usuários editem, excluam ou visualizem cardápios existentes.
  - Capacidade de duplicar cardápios para datas futuras.

 #### Comunicação de Cardápios:

  - Oferecer uma interface para comunicar os cardápios aos alunos, funcionários e responsáveis.
  - Opções de visualização dos cardápios por semana, mês ou dia específico.
  - Capacidade de imprimir ou baixar os cardápios em formato PDF.

 #### Controle de Estoque:

  -Integrar um sistema de controle de estoque para acompanhar os ingredientes necessários para preparar os pratos do cardápio.
  -Alertar automaticamente quando os ingredientes estiverem em baixa quantidade ou próximos da data de validade.

 #### Relatórios e Estatísticas (opcional):

  - Gerar relatórios sobre a frequência de consumo de determinados pratos.
  - Estatísticas sobre a aceitação dos cardápios pelos alunos.
  - Relatórios nutricionais para análise da qualidade das refeições oferecidas.**

### Divisão de Tarefas e Estimativa de Tempo

O projeto será dividido em etapas com duração estimada de 45 dias:

 #### Planejamento e Configuração do Ambiente (7 dias)
 

## Análise de Requisitos (2 dias)
  - Configuração do Ambiente de Desenvolvimento (2 dias)
  - Criação do Esqueleto do Projeto (3 dias)**

 #### Desenvolvimento do Backend (14 dias)

  - Desenvolvimento dos Modelos e Migrações (5 dias)
  - Desenvolvimento dos Controladores (5 dias)
  - Autenticação e Autorização (4 dias)

 #### Desenvolvimento do Frontend (14 dias)
  - Design das Páginas (7 dias)
  - Integração com Backend (4 dias)
  - Testes de Usabilidade (3 dias)

 #### Implementação de Recursos Adicionais e Testes (7 dias)

  - Implementação de Recursos Extras (4 dias)
  - Testes Funcionais (2 dias)
  - Correção de Bugs (1 dia)

 #### Preparação para Lançamento (3 dias)

  - Documentação (2 dias)
  - Preparação para Implantação (1 dia)

#### Implantação e Lançamento (1 dia)

## Considerações Finais

O desenvolvimento deste software será conduzido seguindo as práticas recomendadas
de desenvolvimento ágil, com ênfase na colaboração entre os membros da equipe e
a entrega contínua de valor. Durante o processo de desenvolvimento, será
crucial manter uma comunicação eficaz entre os membros da equipe e realizar
revisões regulares para garantir o progresso suave do projeto.

| Canal de comunicação                                                         | Objetivos                                                                                                                                                                                                          |
|------------------------------------------------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Discord                                         | - Tirar dúvidas <br>- Discussões de como instalar a plataforma<br> - Discussões de utilizações do VSCode, Github, PHP, Bootstrap, Banco de dados e Laravel<br> - Suporte entre membros da atividade academica<br> - FAQ da comunidade (sobre o produto e funcionalidades) |
| [Issues do Github](https://github.com/ffonsecaead/nutricampos/issues/new/choose) | - Sugestão de novas funcionalidades<br> - Reportar bugs<br> - Discussões técnicas                                                                                                                                  |

## Instalação

Consulte o passo a passo no [guia de instalação](INSTALL.md).
