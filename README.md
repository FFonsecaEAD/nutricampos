# Nutricampus

- [Sobre o NutriCampus](#sobre-o-nutricampus)
- [Identificação](#identificação)
- [Comunicação](#comunicação)
- [Instalação](#instalação)
- <!-- - [Como contribuir](#como-contribuir) -->

<!-- - [FAQ](#perguntas-frequentes-faq)
- [Pacotes (módulos)](#pacotes-módulos)
- [Upgrade](#upgrade) -->

## Sobre o NutriCampus

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

## Comunicação

#### Visão Geral:

O projeto "NutriCampus" busca promover uma alimentação saudável e consciente entre os alunos, funcionários e responsáveis da comunidade escolar. Para garantir o sucesso deste projeto, é essencial estabelecer uma comunicação efetiva entre os estudantes envolvidos, o professor responsável e potenciais contribuintes que possam se engajar no desenvolvimento e aprimoramento do sistema.

#### Ferramentas de Comunicação:

| Canal de comunicação                                                        | Objetivos                                                                                                                                                                                                                                                                                   |
| ----------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Reuniões Presenciais                                                         | Serão realizadas reuniões presenciais periódicas entre os estudantes e<br />o professor para discutir o progresso do projeto, compartilhar ideias e<br />tomar decisões estratégicas.                                                                                                  |
| Comunicação Online                                                          | Utilizaremos plataformas de comunicação online, como grupos no<br />Discord, Slack, Microsoft Teams ou Google Meet, para facilitar a comunicação <br />instantânea entre os membros da equipe, permitindo troca rápida de <br />informações e discussões sobre questões urgentes. |
| E-mail                                                                        | O professor estará disponível por e-mail para esclarecer dúvidas,<br />fornecer orientações e feedback aos estudantes, além de manter <br />contato com possíveis contribuintes externos interessados em <br />participar do projeto.                                                |
| [Issues do Github](https://github.com/ffonsecaead/nutricampos/issues/new/choose) | Sugestão de novas funcionalidades;<br />Reportar bugs.<br />Discussões técnicas                                                                                                                                                                                                          |

#### Responsabilidades dos Envolvidos:

| Stakeholders           | Responsabilidade                                                                                                                                                                                                                                                                                                                                                                                               |
| ---------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Estudantes             | Os estudantes serão responsáveis por manter uma comunicação transparente e<br />colaborativa entre si, compartilhando atualizações, progressos e obstáculos <br />enfrentados durante o desenvolvimento do projeto;<br />Eles deverão participar ativamente das reuniões presenciais e contribuir com <br />ideias inovadoras para aprimorar o sistema "NutriCampus".                                 |
| Professor              | O professor atuará como facilitador do projeto, oferecendo suporte técnico e<br />orientações aos estudantes, além de coordenar as atividades do grupo.<br />Ele será responsável por agendar e liderar as reuniões presenciais, acompanhar <br />o progresso do projeto e fornecer feedback construtivo para garantir a qualidade <br />do trabalho realizado.                                        |
| Contribuintes Externos | Os contribuintes externos interessados em participar do projeto serão<br />bem-vindos a contribuir com ideias, sugestões ou recursos adicionais <br />que possam beneficiar o desenvolvimento do sistema "NutriCampus".<br />Eles poderão entrar em contato com o professor por e-mail para oferecer <br />sua colaboração ou solicitar mais informações sobre como podem se <br />envolver no projeto. |

#### Transparência e Colaboração:

A comunicação no projeto "NutriCampus" será pautada pela transparência, confiança e colaboração mútua entre os estudantes, o professor e possíveis contribuintes externos. Através de um ambiente de comunicação aberto e receptivo, esperamos promover uma troca constante de conhecimento e experiências, impulsionando o sucesso e impacto positivo do projeto na comunidade escolar.

## Instalação

Consulte o passo a passo no [guia de instalação](INSTALL.md).
