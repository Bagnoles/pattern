<?php

/* Команда: вы — разработчик продукта Macrosoft World. Это текстовый редактор с
возможностями копирования, вырезания и вставки текста (пока только это). Необходимо
реализовать механизм по логированию этих операций и возможностью отмены и возврата
действий. Т. е., в ходе работы программы вы открываете текстовый файл .txt, выделяете
участок кода (два значения: начало и конец) и выбираете, что с этим кодом делать. */



interface EditText
{
    public function edit();
}

class CopyText implements EditText
{
    public function edit() {
        echo "Копируем текст";
    }
}

class CutText implements EditText
{
    public function edit() {
        echo "Вырезаем текст";
    }
}

class PutText implements EditTExt
{
    public function edit() {
        echo "Вставляем текст";
    }
}

interface Command
{
    public function execute();
}

class Distributor implements Command
{
    private $editor;

    public function __construct(EditText $editor) {
        $this->editor = $editor;
    }

    public function execute() {
        $this->editor->edit();
    }
}