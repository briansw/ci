class CreateNoteBlock < ActiveRecord::Migration
  def change
    create_table :note_blocks do |t|
      t.string :title
      t.text :body
      t.integer :content_block_id

      t.timestamps
    end
    add_index :note_blocks, [:content_block_id]
  end
end
