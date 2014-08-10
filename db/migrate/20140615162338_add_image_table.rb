class AddImageTable < ActiveRecord::Migration
  def change
    create_table :images do |t|
      t.string :attachment
      t.references :parent, polymorphic: true
      t.string :relationship_name
      t.text :caption

      t.timestamps
    end
    add_index :images, [:parent_id, :parent_type]
  end
end
