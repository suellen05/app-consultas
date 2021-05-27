# App Consultas

## Miro com a documentação do projeto
https://miro.com/app/board/o9J_lO9jUSo=/

## Descrição
Aplicativo web para controlar a agenda de consulta dos pacientes de uma clínica médica. O sistema terá os módulos de:
- Cadastro de médicos
    - Inclusão
    - Alteração
    - Exclusão
    - Listagem de todos os médicos
    - Filtro por área do médico
- Cadastro de pacientes
    - Inclusão
    - Alteração
    - Exclusão
    - Listagem de todos os pacientes
    - Opção de pesquisar o paciente por qualquer parte do nome.
- Cadastro de agenda
    - Agendamento de paciente
    - Alteração em uma agendamento
    - Exclusão de um agendamento
    - Listagem de todos os agendamentos

## Tecnologias (Stack)
- Apache (XAMPP)
- PHP
- MariaDB
- HTML
- CSS
- Javascript
- jQuery
- Bootstrap

---
## SQL - Banco de dados
### Criação do banco de dados
```sql
CREATE DATABASE BD_CONSULTORIO CHARACTER SET utf8 COLLATE utf8_general_ci;
```

### Criação da tabela médicos

```sql
CREATE TABLE `bd_consultorio`.`TB_MEDICOS` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `nome` VARCHAR(100) NOT NULL ,  
    `telefone` VARCHAR(20) NOT NULL ,  
    `crm` VARCHAR(50) NOT NULL ,  
    `especialidade` VARCHAR(50) NOT NULL ,    PRIMARY KEY  (`id`)
) 
ENGINE = InnoDB;
```
### CRIACAO DA TABELA DE PACIENTES

CREATE TABLE `bd_consultorio`.`tb_pacientes` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `nome` VARCHAR(100) NOT NULL ,  
    `telefone` VARCHAR(20) NOT NULL ,  
    `data_nascimento` DATE NOT NULL ,  
    `convenio` VARCHAR(3) NOT NULL ,  
    `diagnostico` TEXT NOT NULL ,   
     PRIMARY KEY  (`id`)
) 
ENGINE = InnoDB;


### Estrutura da tabela `tb_agendas`
--

CREATE TABLE `tb_agendas` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `id_medico` int(11) NOT NULL,
  `sala` varchar(20) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_agendas`
--
ALTER TABLE `tb_agendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_agenda_medico` (`id_medico`),
  ADD KEY `fk_agenda_paciente` (`id_paciente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_agendas`
--
ALTER TABLE `tb_agendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_agendas`
--
ALTER TABLE `tb_agendas`
  ADD CONSTRAINT `fk_agenda_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `tb_pacientes` (`id`);
COMMIT;


### Criacao da tabela de Usuarios

CREATE TABLE `bd_consultorio`.`tb_usuarios` ( `id` INT NOT NULL , `usuario` VARCHAR(30) NOT NULL , `senha` VARCHAR(8) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
