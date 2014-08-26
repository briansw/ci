class NoteBlock < ActiveRecord::Base

  belongs_to :content_block

  validates_presence_of :body

  def as_json(options = {})
    options.reverse_merge! only: [:title, :body]
    super(options)
  end

end
