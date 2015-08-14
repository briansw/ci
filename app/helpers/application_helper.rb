module ApplicationHelper

  def nav_link(name, path)
    link_to(name, path, class: "nounderline #{current_class(path)}")
  end

  def current_class(path)
    if path.gsub('/', '') == request.path.split('/')[1] || path == '/lectures' && current_page?(root_path)
      'current'
    end
  end

  def current_record(record)
    if record == record.class.current_studio || record == record.class.current_lab
      'current'
    end
  end

  def section_label(record)
    if record.section == 'Studio'
      'studio-section'
    else
      'lab-section'
    end
  end

  def grid_view?
    'grid' if @lecture.present? && @lecture.grid_view? || @readings.present?
  end

  def lightbox_block_index(cb)
    @img_index ||= 0
    if cb.block_type == 'ImageBlock' || cb.block_type == 'VideoBlock'
      @img_index += 1
    end
  end

end
